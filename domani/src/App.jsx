import "./styles/index.css";
import { BrowserRouter, Routes, Route } from "react-router-dom";

import Auth from "./pages/Auth";
import Landing from "./pages/Landing";

function App() {
  return ( 
  <div className="App">
    <BrowserRouter>
      <Routes>
          <Route path="/Auth" element={<Auth />} />
          <Route path="/" element={<Landing />} />

      </Routes>
    </BrowserRouter>    
  </div>
  );
}

export default App;
