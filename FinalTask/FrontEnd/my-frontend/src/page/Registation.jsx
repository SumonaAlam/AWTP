import React from "react";
import axios from "axios";
import {useNavigate} from "react-router-dom"

function Registration()
{
    const navigate = useNavigate();
    const handleSubmit = (e) => {
        e.preventDefault();
        const data = new FormData(e.currentTarget);
       
        
        const result = {
            name: data.get("name"),
            password: data.get("password"),
            age: data.get("age"),
            address: data.get("address"),
            email: data.get("email")
        } 
        console.log(result);
        
        axios.post("http://127.0.0.1:8000/api/register", result).then((response) => {
            console.log(response);
        })

            navigate("/result", {state:{result: result} });
    };


    return (
        <>
            <form onSubmit={handleSubmit}>
                <div>
                    <label htmlFor="Name">Name</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div>
                    <label htmlFor="Email">Email</label>
                    <input type="text" name="email" id="email" />
                </div>

                <div>
                    <label htmlFor="Password">Password</label>
                    <input type="password" name="password" id="password" />
                </div>
                <div>
                    <label htmlFor="Age">Age</label>
                    <input type="text" name="age" id="age" />
                </div>
                <div>
                    <label htmlFor="address">Address</label>
                    <input type="text" name="address" id="address" />
                </div>
               
                <div>
                    <button type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </>
    );
}

export default Registration; 
