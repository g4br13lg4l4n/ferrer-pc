import React from 'react'

export const Categories = (props) => {
  let data = props.data
  console.log(data)
  return(
    <h1>{data.categorie.name}</h1>
  )
}