import "./styles/index.css";
import { BrowserRouter, Routes, Route } from "react-router-dom";

import Auth from "./pages/Auth";
import Landing from "./pages/Landing";
import Home from "./pages/Home";
import Create from "./pages/Create capsule";
import Private from "./pages/Private";
import Profile from "./pages/profile";


function App() {
  return ( 
  <div className="App">
    <BrowserRouter>
      <Routes>
          <Route path="/" element={<Landing />} />
          <Route path="/Auth" element={<Auth />} />
          <Route path="/Home" element={<Home />} />
          <Route path="/Create" element={<Create />} />
          <Route path="/Private" element={<Private />} />
          <Route path="/Profile" element={<Profile />} />



      </Routes>
    </BrowserRouter>    
  </div>
  );
}

export default App;
