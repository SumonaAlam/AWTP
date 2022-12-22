import * as React from "react";
import Box from "@mui/material/Box";
import imageLearn from "../image/learn.png";
import imageRetain from "../image/retain.png";
import Button from "@mui/material/Button";
import { Grid } from "@mui/material";
import { Link } from "react-router-dom";

export const Cue = () => {
  return (
    <Box
      sx={{
        display: "flex",
        flexWrap: "wrap",
        alignItems: "center",
        justifyContent: "center",
        marginTop: "50px",
        marginBottom: "200px",
        "& > :not(style)": {
          m: 3,
          width: 500,
          height: 200,
          backgroundColor: "#041C32",
        },
      }}
    >
      <Button
        variant="contained"
        sx={{
          ":hover": {
            bgcolor: "#04293A", // theme.palette.primary.main
          },
        }}
      >
        <Link
          to="/student/subject"
          style={{ textDecoration: "none", color: "white" }}
        >
          <Grid container>
            <Grid item md={4}>
              <img src={imageLearn} width="120px" height="120px" alt="" />
            </Grid>
            <Grid item md={8} marginTop="40px">
              <h1
                style={{
                  fontFamily: "'Crimson Text', serif",
                  fontSize: "4rem",
                }}
              >
                LEARN
              </h1>
            </Grid>
          </Grid>
        </Link>
      </Button>
      <Button
        variant="contained"
        sx={{
          ":hover": {
            bgcolor: "#04293A", // theme.palette.primary.main
          },
        }}
      >
        <Link
          to="/student/retain"
          style={{ textDecoration: "none", color: "white" }}
        >
          <Grid container>
            <Grid item md={4}>
              <img src={imageRetain} width="120px" height="120px" alt="" />
            </Grid>
            <Grid item md={8} marginTop="30px">
              <h1
                style={{
                  fontFamily: "'Crimson Text', serif",
                  fontSize: "4rem",
                }}
              >
                RETAIN
              </h1>
            </Grid>
          </Grid>
        </Link>
      </Button>
    </Box>
  );
};
