import React from "react";
import { NavBar } from "../partials/Header";
import { Outlet } from "react-router-dom";
import { Footer } from "../partials/Footer";
export const StudentLayout = () => {
  return (
    <>
      <NavBar />
      <Outlet />
      <Footer />
    </>
  );
};
