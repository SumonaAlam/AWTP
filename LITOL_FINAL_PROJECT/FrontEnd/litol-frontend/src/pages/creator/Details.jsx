import axios from "axios";
import React from "react";
import { useParams } from "react-router-dom";
import { Detail } from "../../component/Detail";
import { baseURL } from "../../utility";

export const CDetails = () => {
  const [details, setDetailsInfo] = React.useState([]);
  const { contentId } = useParams();
  React.useEffect(() => {
    axios
      .get(
        baseURL +
          `/api/creator/contentDetail?creator_id=${
            JSON.parse(localStorage.getItem("userData")).user.creator_id
          }&content_id=${contentId}`
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
          role="CREATOR"
        />
      </div>
    );
  }
};
