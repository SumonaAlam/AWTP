import {
  Avatar,
  Box,
  Button,
  Card,
  CardActions,
  CardContent,
  Divider,
  Typography,
} from "@mui/material";
import React from "react";
import avatar from "../image/cnerd.jpg";

export const AccountProfile = ({ user }) => {
  console.log(user);

  return (
    <Card>
      <CardContent>
        <Box
          sx={{
            alignItems: "center",
            display: "flex",
            flexDirection: "column",
          }}
        >
          <Avatar
            src={avatar}
            sx={{
              height: 64,
              mb: 2,
              width: 64,
            }}
          />
          <Typography color="textPrimary" gutterBottom variant="h5">
            {user.name}
          </Typography>
          <Typography color="textSecondary" variant="body2">
            {user.role}
          </Typography>
        </Box>
      </CardContent>
      <Divider />
      {/* <CardActions>
        <Button color="primary" fullWidth variant="text">
          Upload picture
        </Button>
      </CardActions> */}
    </Card>
  );
};
