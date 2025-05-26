import { useEffect, useState } from 'react'
import api from "./api"
import './App.css'

function App() {
  const [data,setData]=useState("hi")
   useEffect(() => {
    api
      .get("/hello") 
      .then((response) => {
        setData(response.data.message); 
      })
      .catch((error) => {
        console.error("Erreur lors de la récupération des articles:", error);
      });
  }, []);
  return (
    <>
      {data}
    </>
  )
}

export default App
