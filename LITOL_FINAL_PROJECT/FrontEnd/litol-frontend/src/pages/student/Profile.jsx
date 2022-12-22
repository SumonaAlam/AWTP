import React from "react";
import { Box, Container, Grid, Typography } from "@mui/material";
import { AccountProfile } from "../../component/AccountProfile";
import { AccountProfileDetails } from "../../component/AccountProfileDetails";

export const Profile = () => {
  const user = JSON.parse(localStorage.getItem("userData"));

  return (
    <>
      <Box
        component="main"
        sx={{
          flexGrow: 1,
          py: 8,
        }}
      >
        <Container maxWidth="lg">
          <Typography sx={{ mb: 3 }} variant="h4">
            Account
          </Typography>
          <Grid container spacing={3}>
            <Grid item lg={4} md={6} xs={12}>
              <AccountProfile user={user} />
            </Grid>
            <Grid item lg={8} md={6} xs={12}>
              <AccountProfileDetails data={user} />
            </Grid>
          </Grid>
        </Container>
      </Box>
    </>
  );
};
