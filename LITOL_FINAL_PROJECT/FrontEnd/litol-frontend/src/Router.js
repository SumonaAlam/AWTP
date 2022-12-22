import React from "react";
import { Navigate, useRoutes } from "react-router-dom";
import { StudentLayout } from "./pages/student/StudentLayout";
import { SignIn } from "./pages/SignIn";
import { SignUp } from "./pages/student/SignUp";
import { Subject } from "./pages/student/Subject";
import { StudentDash } from "./pages/student/StudentDash";
import { Retention } from "./pages/student/Retention";
import { CreatorSignUp } from "./pages/creator/SignUp";
import { CreatorDash } from "./pages/creator/CreatorDash";
import { CreatorLayout } from "./pages/creator/CreatorLayout";
import { CDetails } from "./pages/creator/Details";
import { SummaryDetails } from "./pages/student/SummaryDetails";
import { Content } from "./pages/student/Content";
import { Details } from "./pages/student/Details";
import { Profile } from "./pages/student/Profile";


export const Router = () => {

  const routes = useRoutes([
    {
      path: "",
      element: <Navigate replace to="/signin" />
    },
    {
      path: "signin",
      element: <SignIn />
    },
    {
      path: "student/signup",
      element: <SignUp />
    },
    {
      path: "creator/signup",
      element: <CreatorSignUp />
    },
    {
      path: "student",
      element: <StudentLayout />,
      children: [
        {
          path: "dashboard",
          element: <StudentDash />
        },
        {
          path: "subject",
          element: <Subject />
        },
        {
          path: "retain",
          element: <Retention />
        },
        {
          path: "summary/:summaryId",
          element: <SummaryDetails />
        },
        {
          path: "subject/:subjectId",
          element: <Content />
        },
        {
          path: "topic/:topicId",
          element: <Details />
        },
        {
          path: "profile",
          element: <Profile />
        },
      ]
    },
    {
      path: "creator",
      element: <CreatorLayout />,
      children: [
        {
          path: "dashboard",
          element: <CreatorDash />
        },
        {
          path: "content/:contentId",
          element: <CDetails />
        },
        {
          path: "profile",
          element: <Profile />
        },

      ]
    }
  ]);
  return routes;
};
