import React from "react";
import { Box } from "@mui/system";
import axios from "axios";
import { baseURL } from "../../utility";
import { TopicCard } from "../../component/TopicCard";
import { useParams } from "react-router-dom";

const showContents = ({ topic_id, title, image, detail }) => {
  return (
    <TopicCard
      key={topic_id}
      id={topic_id}
      image={image}
      title={title}
      detail={detail}
    />
  );
};

export const Content = () => {
  const [contents, setContents] = React.useState([]);
  const { subjectId } = useParams();
  React.useEffect(() => {
    axios
      .get(baseURL + `/api/student/subject?subject_id=${subjectId}`)
      .then((response) => {
        setContents(response.data);
      });
  }, []);

  console.log(contents);
  return (
    <Box
      sx={{
        display: "flex",
        flexWrap: "wrap",
        marginTop: "20px",
      }}
    >
      {contents.map(showContents)}
    </Box>
  );
};
