import * as React from "react";
import CssBaseline from "@mui/material/CssBaseline";
import Grid from "@mui/material/Grid";
import Container from "@mui/material/Container";
import { createTheme, ThemeProvider } from "@mui/material/styles";
import { Divider, Typography } from "@mui/material";

const theme = createTheme();

export const TopicDetailComp = ({ topic }) => {
  return (
    <ThemeProvider theme={theme}>
      <CssBaseline />
      <Container maxWidth="lg">
        <main>
          <Grid container spacing={5} sx={{ mt: 3, mb: 3 }}>
            <img
              src={require(`../../../../BackEnd/storage/app/public/content/` +
                topic.image)}
              alt="my foot"
              width="70%"
              height="450px"
            />
          </Grid>

          <Grid container spacing={5} sx={{ mt: 3, mb: 3 }}>
            <Grid item xs={12} md={8}>
              <Typography variant="h3" gutterBottom>
                {topic.title}
              </Typography>
              <Divider />
              <p>{topic.detail}</p>
            </Grid>
          </Grid>
        </main>
      </Container>
    </ThemeProvider>
  );
};
