
import { BrowserRouter as Router, Routes,Route } from 'react-router-dom';
import Register from './Register';
import './App.css'

function App() {
 

  return (
    <>
     <div className="container">
      <h4>API APPLICATION WITH React & PHP</h4>
      <Router>
        <Routes>
          <Route></Route>
        </Routes>
      </Router>
     </div>
     <Register/>
    </>
  )
}

export default App
