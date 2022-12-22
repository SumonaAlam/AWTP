import * as React from "react";
import Card from "@mui/material/Card";
import CardContent from "@mui/material/CardContent";
import CardMedia from "@mui/material/CardMedia";
import Typography from "@mui/material/Typography";
import { CardActionArea, Link } from "@mui/material";

export const SubjectCard = ({ image, subject, id }) => {
  return (
    <Link href={"/student/subject/" + id} underline="none">
      <Card sx={{ width: 280, margin: "20px" }}>
        <CardActionArea>
          <CardMedia
            component="img"
            height="140"
            image={require("../image/" + image.toLowerCase() + ".jpg")}
            alt="none"
          />
          <CardContent>
            <Typography gutterBottom variant="h5" component="div">
              {subject}
            </Typography>
          </CardContent>
        </CardActionArea>
      </Card>
    </Link>
  );
};
