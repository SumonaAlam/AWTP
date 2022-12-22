import * as React from "react";
import Card from "@mui/material/Card";
import CardContent from "@mui/material/CardContent";
import CardMedia from "@mui/material/CardMedia";
import Typography from "@mui/material/Typography";
import { CardActionArea, Link } from "@mui/material";

export const TopicCard = ({ id, title, image, detail }) => {
  console.log(title, id);
  return (
    <Link href={"/student/topic/" + id} underline="none">
      <Card sx={{ width: 240, margin: "20px" }}>
        <CardActionArea>
          <CardMedia
            component="img"
            height="140"
            image={require("../../../../BackEnd/storage/app/public/content/" +
              image)}
            alt="green iguana"
          />
          <CardContent>
            <Typography gutterBottom variant="h6" component="div">
              {title}
            </Typography>
            <Typography variant="body2" color="text.primary">
              {detail}
            </Typography>
          </CardContent>
        </CardActionArea>
      </Card>
    </Link>
  );
};
