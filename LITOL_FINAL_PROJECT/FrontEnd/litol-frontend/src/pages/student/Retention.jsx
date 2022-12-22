import * as React from "react";
import Button from "@mui/material/Button";
import CssBaseline from "@mui/material/CssBaseline";
import TextField from "@mui/material/TextField";
import Grid from "@mui/material/Grid";
import Box from "@mui/material/Box";
import Container from "@mui/material/Container";
import { createTheme, ThemeProvider } from "@mui/material/styles";
import { baseURL } from "../../utility";
import axios from "axios";
import logoImage from "../../image/summary.png";
import { SummaryCard } from "../../component/SummaryCard";

const theme = createTheme();

const getContents = ({ summary_id, title, detail, image }) => {
  return (
    <SummaryCard
      key={summary_id}
      id={summary_id}
      title={title}
      detail={detail}
      image={image}
    />
  );
};

const handleSubmit = (event) => {
  event.preventDefault();
  const data = new FormData(event.currentTarget);
  const resultData = {
    title: data.get("title"),
    detail: data.get("content"),
    image: data.get("image"),
    student_id: JSON.parse(localStorage.getItem("userData")).user.student_id,
  };
  console.log(resultData);

  axios
    .post(baseURL + "/api/student/summarySubmit", resultData, {
      headers: {
        "Content-Type": "multipart/form-data",
      },
    })
    .then((response) => {
      console.log(response.data);
    });
};

export const Retention = () => {
  const [summary, setSummary] = React.useState([]);
  const [image, setImage] = React.useState("");

  const handleImageChange = (event) => {
    setImage(event.currentTarget.files[0].name);
  };

  React.useEffect(() => {
    axios.get(baseURL + `/api/student/summary`).then((response) => {
      setSummary(response.data);
      console.log(response.data);
    });
  }, []);

  if (summary.length !== 0) {
    return (
      <>
        <ThemeProvider theme={theme}>
          <Container component="main" maxWidth="xs">
            <CssBaseline />
            <Box
              sx={{
                marginTop: 8,
                display: "flex",
                flexDirection: "column",
                alignItems: "center",
              }}
            >
              <img src={logoImage} height="100px" width="100px" alt="logo" />

              <Box
                component="form"
                noValidate
                onSubmit={handleSubmit}
                sx={{ mt: 3 }}
              >
                <Grid container spacing={2}>
                  <Grid item xs={12} sm={12}>
                    <TextField
                      name="title"
                      fullWidth
                      id="title"
                      label="Title"
                      required
                      autoFocus
                    />
                  </Grid>

                  <Grid item xs={12}>
                    <TextField
                      required
                      fullWidth
                      multiline
                      maxRows={6}
                      name="content"
                      label="Content"
                      type="content"
                      id="content"
                    />
                  </Grid>
                </Grid>
                <Button
                  component="label"
                  variant="contained"
                  sx={{ mt: 3, mb: 2 }}
                >
                  Upload Image
                  <input
                    type="file"
                    hidden
                    name="image"
                    id="image"
                    onChange={handleImageChange}
                  />
                </Button>
                <p>Uploaded: {image}</p>
                <Button
                  type="submit"
                  fullWidth
                  variant="contained"
                  sx={{ mt: 3, mb: 2 }}
                >
                  Make A Summary
                </Button>
              </Box>
            </Box>
          </Container>
        </ThemeProvider>
        <h2>Summary Gallery:</h2>
        <Box
          sx={{
            display: "flex",
            flexWrap: "wrap",
            marginTop: "20px",
          }}
        >
          {summary.map(getContents)}
        </Box>
      </>
    );
  }
};
