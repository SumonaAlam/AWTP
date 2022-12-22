import axios from "axios";
import { useLocation } from "react-router-dom";

export const Result = () => {

    const location = useLocation();

    const data = location.state.result;
        return <>
    <h2>Welcome, {data.name}</h2>
    <p>Email: {data.email}</p>
    <p>Age: {data.age}</p>
    <p>Address: {data.address}</p>
    </>
    
}