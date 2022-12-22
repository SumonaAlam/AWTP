import * as React from "react";
import Avatar from "@mui/material/Avatar";
import Button from "@mui/material/Button";
import CssBaseline from "@mui/material/CssBaseline";
import TextField from "@mui/material/TextField";
import FormControlLabel from "@mui/material/FormControlLabel";
import Checkbox from "@mui/material/Checkbox";
import Link from "@mui/material/Link";
import Grid from "@mui/material/Grid";
import Box from "@mui/material/Box";
import LockOutlinedIcon from "@mui/icons-material/LockOutlined";
import Typography from "@mui/material/Typography";
import Container from "@mui/material/Container";
import { createTheme, ThemeProvider } from "@mui/material/styles";
import { FormControl, InputLabel, MenuItem, Select } from "@mui/material";
import { baseURL } from "../../utility";
import axios from "axios";

function Copyright(props) {
  return (
    <Typography
      variant="body2"
      color="text.secondary"
      align="center"
      {...props}
    >
      <Link color="inherit" href="/creator/signup">
        Wanna Be A Creator? SignUp Here!
      </Link>
    </Typography>
  );
}

const theme = createTheme();

export const SignUp = () => {
  const handleSubmit = (event) => {
    event.preventDefault();
    const data = new FormData(event.currentTarget);
    const resultData = {
      username: data.get("name"),
      age: data.get("age"),
      dob: data.get("date"),
      gender: data.get("gender"),
      email: data.get("email"),
      password: data.get("password"),
      address: data.get("address"),
      phone: data.get("phone"),
      emailCheck: data.get("emailCheck"),
    };
    console.log(resultData);

    axios.post(baseURL + "/api/student/signUp", resultData).then((response) => {
      console.log(response.data);
    });
  };

  return (
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
          <Avatar sx={{ m: 1, bgcolor: "secondary.main" }}>
            <LockOutlinedIcon />
          </Avatar>

          <Typography component="h1" variant="h5">
            Sign up
          </Typography>

          <Box
            component="form"
            noValidate
            onSubmit={handleSubmit}
            sx={{ mt: 3 }}
          >
            <Grid container spacing={2}>
              <Grid item xs={12} sm={6}>
                <TextField
                  name="name"
                  fullWidth
                  id="name"
                  label="Username"
                  required
                  autoFocus
                />
              </Grid>

              <Grid item xs={12} sm={6}>
                <TextField required fullWidth id="age" label="Age" name="age" />
              </Grid>

              <Grid item xs={6}>
                <FormControl fullWidth>
                  <InputLabel id="genderLabel">Gender</InputLabel>
                  <Select
                    id="gender"
                    defaultValue="male"
                    label="Gender"
                    name="gender"
                  >
                    <MenuItem value={"male"}>Male</MenuItem>
                    <MenuItem value={"female"}>Female</MenuItem>
                  </Select>
                </FormControl>
              </Grid>

              <Grid item xs={6}>
                <TextField
                  id="date"
                  label="Birthday"
                  type="date"
                  defaultValue="2017-05-24"
                  fullWidth
                  name="date"
                />
              </Grid>

              <Grid item xs={12}>
                <TextField
                  required
                  fullWidth
                  id="email"
                  label="Email"
                  name="email"
                />
              </Grid>

              <Grid item xs={12}>
                <TextField
                  required
                  fullWidth
                  name="password"
                  label="Password"
                  type="password"
                  id="password"
                />
              </Grid>

              <Grid item xs={12}>
                <TextField
                  required
                  fullWidth
                  name="address"
                  label="Address"
                  type="address"
                  id="address"
                />
              </Grid>

              <Grid item xs={12}>
                <TextField
                  required
                  fullWidth
                  name="phone"
                  label="Phone"
                  type="phone"
                  id="phone"
                />
              </Grid>

              <Grid item xs={12}>
                <FormControlLabel
                  control={<Checkbox name="emailCheck" color="primary" />}
                  label="I want to receive a confirmation of account via my email."
                />
              </Grid>
            </Grid>
            <Button
              type="submit"
              fullWidth
              variant="contained"
              sx={{ mt: 3, mb: 2 }}
            >
              Sign Up
            </Button>
            <Grid container justifyContent="flex-end">
              <Grid item>
                <Link href="/signin" variant="body2">
                  Already have an account? Sign in
                </Link>
              </Grid>
            </Grid>
          </Box>
        </Box>
        <Copyright sx={{ mt: 5 }} />
      </Container>
    </ThemeProvider>
  );
};
