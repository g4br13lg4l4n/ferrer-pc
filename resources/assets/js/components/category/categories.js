import React from 'react'

export const Categories = (props) => {
  let data = props.data
  return(
    <div className = "">
      <h1>{data.categorie.name}</h1>
      <ul>
        {data.categorie.subcategories.map( (el, i) => {
          return (
            <li key = {i}>el</li>
          )
        })}
      </ul>
    </div>
  )
}