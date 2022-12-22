import axios from "axios";
import React from "react";
import { useParams } from "react-router-dom";
import { Detail } from "../../component/Detail";
import { baseURL } from "../../utility";

export const SummaryDetails = () => {
  const [details, setDetailsInfo] = React.useState([]);
  const { summaryId } = useParams();
  React.useEffect(() => {
    axios
      .get(
        baseURL +
          `/api/student/summaryDetail?student_id=${
            JSON.parse(localStorage.getItem("userData")).user.student_id
          }&summary_id=${summaryId}`
      )
      .then((response) => {
        setDetailsInfo(response.data);
        console.log(response.data);
      });
  }, []);

  if (details.length !== 0) {
    return (
      <div>
        <Detail
          content={details.content}
          contents={details.contents}
          // eslint-disable-next-line
          role="STUDENT"
        />
      </div>
    );
  }
};
