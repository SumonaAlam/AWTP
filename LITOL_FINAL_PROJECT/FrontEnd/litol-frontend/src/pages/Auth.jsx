import { useNavigate } from "react-router-dom";

export const Auth = () => {
  const navigate = useNavigate();

  return navigate("student/dash");
};
