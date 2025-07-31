import React, { useState } from "react";
import SideBar from "../../components/shared/Sidebar";
import PostCreationForm from "../../components/CreatePost";
import "./styles.css";


const Create = ({}) =>{

    return (
        <div className="create-page">
            <div className="side--bar">
                <SideBar />
            </div>
            <div className="post-form">

                <PostCreationForm />

            </div>

        </div>
  );
  
};
export default Create;