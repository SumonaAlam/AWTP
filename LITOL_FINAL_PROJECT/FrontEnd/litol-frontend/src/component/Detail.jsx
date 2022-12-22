import * as React from "react";
import CssBaseline from "@mui/material/CssBaseline";
import Grid from "@mui/material/Grid";
import Container from "@mui/material/Container";
import GitHubIcon from "@mui/icons-material/GitHub";
import FacebookIcon from "@mui/icons-material/Facebook";
import TwitterIcon from "@mui/icons-material/Twitter";
import { createTheme, ThemeProvider } from "@mui/material/styles";
import Main from "./Main";
import Sidebar from "./Sidebar";

const sidebar = {
  title: "About Writer",
  description: "",
  social: [
    { name: "GitHub", icon: GitHubIcon },
    { name: "Twitter", icon: TwitterIcon },
    { name: "Facebook", icon: FacebookIcon },
  ],
};

const theme = createTheme();

export const Detail = ({ content, contents, role }) => {
  if (role === "STUDENT") {
    sidebar.description = `Hello, I am ${content.student.user.username}. My Age is ${content.student.age}. Currently living in ${content.student.address}`;
  } else {
    sidebar.description = JSON.parse(localStorage.getItem("userData")).user.bio;
  }

  return (
    <ThemeProvider theme={theme}>
      <CssBaseline />
      <Container maxWidth="lg">
        <main>
          <Grid container spacing={5} sx={{ mt: 3, mb: 3 }}>
            <img
              src={require(`../../../../BackEnd/storage/app/public/${
                role === "STUDENT" ? "summary" : "content"
              }/` + content.image)}
              alt="my foot"
              width="70%"
              height="450px"
            />
          </Grid>

          <Grid container spacing={5} sx={{ mt: 3, mb: 3 }}>
            <Main content={content} role={role} />
            <Sidebar
              title={sidebar.title}
              description={sidebar.description}
              social={sidebar.social}
              contents={contents}
              role={role}
            />
          </Grid>
        </main>
      </Container>
    </ThemeProvider>
  );
};
