import * as React from "react";
import Grid from "@mui/material/Grid";
import Typography from "@mui/material/Typography";
import Divider from "@mui/material/Divider";

function Main({ content, role }) {
  return (
    <Grid item xs={12} md={8}>
      <Typography variant="h3" gutterBottom>
        {content.title}
      </Typography>
      <Divider />
      {role === "STUDENT" && <h6>{content.student.user.username}</h6>}
      <p>{content.detail}</p>
    </Grid>
  );
}
export default Main;
