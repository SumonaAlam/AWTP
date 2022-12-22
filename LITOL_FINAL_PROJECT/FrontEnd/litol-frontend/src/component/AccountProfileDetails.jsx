import { useState } from "react";
import React from "react";
import {
  Box,
  Button,
  Card,
  CardContent,
  CardHeader,
  Divider,
  Grid,
  TextField,
} from "@mui/material";
import axios from "axios";
import { baseURL } from "../utility";

export const AccountProfileDetails = ({ data }) => {
  const [user, setUser] = useState(data);

  console.log(data, "FIRST");

  const handleSubmit = (event) => {
    event.preventDefault();
    const data = new FormData(event.currentTarget);
    const resultData = {
      username: data.get("username"),
      age: data.get("age"),
      email: data.get("email"),
      address: data.get("address"),
      phone: data.get("phone"),
      bio: data.get("bio"),
      id: user.user.user_id,
    };

    const getFreshData = () => {
      axios
        .get(
          baseURL +
            `/api/${
              user.role === "STUDENT" ? "student" : "creator"
            }/newData?user_id=${user.user.user_id}`
        )
        .then((response) => {
          setUser(response.data);
          localStorage.setItem("userData", JSON.stringify(response.data));
        });
      console.log("GOT HERE");
    };

    console.log(resultData);
    axios
      .post(
        baseURL +
          `/api/${
            user.role === "STUDENT" ? "student" : "creator"
          }/updateProfile`,
        resultData
      )
      .then((response) => {
        console.log(response.data);
        getFreshData();
      });
  };

  if (user) {
    return (
      <form onSubmit={handleSubmit} autoComplete="off" noValidate>
        <Card>
          <CardHeader
            subheader="The information can be edited"
            title="Profile"
          />
          <Divider />
          <CardContent>
            <Grid container spacing={3}>
              <Grid item md={6} xs={12}>
                <TextField
                  fullWidth
                  // helperText="Please fill this up"
                  label="Username"
                  name="username"
                  required
                  defaultValue={user.name}
                  variant="outlined"
                />
              </Grid>
              <Grid item md={6} xs={12}>
                <TextField
                  fullWidth
                  // helperText="Please fill this up"
                  label="Age"
                  name="age"
                  defaultValue={user.user.age}
                  required
                  variant="outlined"
                />
              </Grid>
              <Grid item md={6} xs={12}>
                <TextField
                  fullWidth
                  // helperText="Please fill this up"
                  label="Email Address"
                  name="email"
                  defaultValue={user.user.email}
                  required
                  variant="outlined"
                />
              </Grid>
              <Grid item md={6} xs={12}>
                <TextField
                  fullWidth
                  // helperText="Please fill this up"
                  label="Phone Number"
                  name="phone"
                  defaultValue={user.user.phone}
                  variant="outlined"
                />
              </Grid>
              {user.role === "STUDENT" && (
                <Grid item md={6} xs={12}>
                  <TextField
                    fullWidth
                    // helperText="Please fill this up"
                    label="Address"
                    name="address"
                    defaultValue={user.user.address}
                    required
                    variant="outlined"
                  />
                </Grid>
              )}
              {user.role === "CREATOR" && (
                <Grid item md={6} xs={12}>
                  <TextField
                    fullWidth
                    // helperText="Please fill this up"
                    label="Bio"
                    name="bio"
                    defaultValue={user.user.bio}
                    required
                    variant="outlined"
                  />
                </Grid>
              )}
            </Grid>
          </CardContent>
          <Divider />
          <Box
            sx={{
              display: "flex",
              justifyContent: "flex-end",
              p: 2,
            }}
          >
            <Button color="primary" variant="contained" type="submit">
              Save details
            </Button>
          </Box>
        </Card>
      </form>
    );
  }
};
