import axios from "axios";
import React from "react";
import { TopicDetailComp } from "../../component/TopicDetailComp";
import { baseURL } from "../../utility";
import { useParams } from "react-router-dom";

export const Details = () => {
  const [topic, setTopic] = React.useState([]);
  const { topicId } = useParams();
  React.useEffect(() => {
    axios
      .get(baseURL + `/api/student/topic?topic_id=${topicId}`)
      .then((response) => {
        setTopic(response.data);
      });
  }, []);

  if (topic.length !== 0) {
    return <TopicDetailComp topic={topic} />;
  }
};
