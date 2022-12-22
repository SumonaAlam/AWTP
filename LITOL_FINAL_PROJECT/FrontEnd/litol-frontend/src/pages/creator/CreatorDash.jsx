import * as React from "react";
import Button from "@mui/material/Button";
import CssBaseline from "@mui/material/CssBaseline";
import TextField from "@mui/material/TextField";
import Grid from "@mui/material/Grid";
import Box from "@mui/material/Box";
import Container from "@mui/material/Container";
import { createTheme, ThemeProvider } from "@mui/material/styles";
import { FormControl, InputLabel, MenuItem, Select } from "@mui/material";
import { baseURL } from "../../utility";
import axios from "axios";
import logoImage from "../../image/new_content.png";
import { ContentCard } from "../../component/ContentCard";

const theme = createTheme();

const getSubjects = ({ subject_id, subject_name }) => {
  return (
    <MenuItem key={subject_id} value={subject_id}>
      {subject_name}
    </MenuItem>
  );
};

const getContents = ({ content_id, subject, topic }) => {
  return (
    <ContentCard
      key={content_id}
      id={content_id}
      title={topic.title}
      detail={subject.subject_name}
      image={topic.image}
    />
  );
};

const handleSubmit = (event) => {
  event.preventDefault();
  const data = new FormData(event.currentTarget);
  const resultData = {
    title: data.get("title"),
    subject: data.get("subject"),
    detail: data.get("content"),
    image: data.get("image"),
    creator_id: JSON.parse(localStorage.getItem("userData")).user.creator_id,
  };
  console.log(resultData);

  axios
    .post(baseURL + "/api/creator/content", resultData, {
      headers: {
        "Content-Type": "multipart/form-data",
      },
    })
    .then((response) => {
      console.log(response.data);
    });
};

export const CreatorDash = () => {
  const [dashInfo, setDashInfo] = React.useState([]);
  const [image, setImage] = React.useState("");

  const handleImageChange = (event) => {
    setImage(event.currentTarget.files[0].name);
  };

  React.useEffect(() => {
    axios
      .get(
        baseURL +
          `/api/creator/dashboard?creator_id=${
            JSON.parse(localStorage.getItem("userData")).user.creator_id
          }`
      )
      .then((response) => {
        setDashInfo(response.data);
        console.log(response.data);
      });
  }, []);

  if (dashInfo.length !== 0) {
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
                  <Grid item xs={12} sm={6}>
                    <TextField
                      name="title"
                      fullWidth
                      id="title"
                      label="Title"
                      required
                      autoFocus
                    />
                  </Grid>

                  <Grid item xs={6}>
                    <FormControl fullWidth>
                      <InputLabel id="genderLabel">Subject</InputLabel>
                      <Select
                        id="subject"
                        defaultValue={dashInfo.subjects[0].subject_id}
                        label="Subject"
                        name="subject"
                      >
                        {dashInfo.subjects.map(getSubjects)}
                      </Select>
                    </FormControl>
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
                  Create New Content
                </Button>
              </Box>
            </Box>
          </Container>
        </ThemeProvider>
        <h2>Content Gallery:</h2>
        <Box
          sx={{
            display: "flex",
            flexWrap: "wrap",
            marginTop: "20px",
          }}
        >
          {dashInfo.contents.map(getContents)}
        </Box>
      </>
    );
  }
};
