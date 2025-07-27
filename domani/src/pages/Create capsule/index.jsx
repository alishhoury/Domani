import React, { useState } from "react";
import SideBar from "../../components/shared/Sidebar";
import PostCreationForm from "../../components/CreatePost";


const Create = ({}) =>{

    return (
        <div className="create-page">
            
            <PostCreationForm />

        </div>
  );
  
};
export default Create;