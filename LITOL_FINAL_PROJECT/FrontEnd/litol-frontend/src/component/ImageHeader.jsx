import * as React from "react";
import Box from "@mui/material/Box";
import Paper from "@mui/material/Paper";
import image from "../image/class.jpg";

export const ImageHeader = ({ height, width }) => {
  return (
    <Box
      sx={{
        "& > :not(style)": {},
      }}
    >
      <Paper elevation={3}>
        <img src={image} width={width} height={height} alt="" />
      </Paper>
    </Box>
  );
};
