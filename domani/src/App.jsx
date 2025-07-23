import "./styles/index.css";
import { BrowserRouter, Routes, Route } from "react-router-dom";

import Auth from "./pages/Auth";
import Landing from "./pages/Landing";
import Home from "./pages/Home";

function App() {
  return ( 
  <div className="App">
    <BrowserRouter>
      <Routes>
          <Route path="/" element={<Landing />} />
          <Route path="/Auth" element={<Auth />} />
          <Route path="/Home" element={<Home />} />


      </Routes>
    </BrowserRouter>    
  </div>
  );
}

export default App;
