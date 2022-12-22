import React from "react";
import { Box } from "@mui/system";
import { SubjectCard } from "../../component/SubjectCard";
import axios from "axios";
import { baseURL } from "../../utility";

const showSubjects = ({ subject_id, subject_name }) => {
  console.log("../image/" + subject_name.toLowerCase() + ".jpg");
  return (
    <SubjectCard
      key={subject_id}
      id={subject_id}
      image={subject_name}
      subject={subject_name}
    />
  );
};

export const Subject = () => {
  const [subjects, setSubjects] = React.useState([]);
  React.useEffect(() => {
    axios.get(baseURL + "/api/student/learnSection").then((response) => {
      setSubjects(response.data);
    });
  }, []);

  console.log(subjects);
  return (
    <Box
      sx={{
        display: "flex",
        flexWrap: "wrap",
        marginTop: "20px",
      }}
    >
      {subjects.map(showSubjects)}
    </Box>
  );
};
