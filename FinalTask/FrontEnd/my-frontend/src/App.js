import logo from './logo.svg';
import './App.css';
import Registration from './page/Registation';
import { Result } from './page/Result';
import { Route, Router, Routes } from 'react-router';

function App() {
  return (
    <div className="App">
      <Routes>
      <Route path="/result" element={<Result/>} />
      <Route path="/" element={<Registration/>} />
      </Routes>
      
      
    </div>
  );
}

export default App;
