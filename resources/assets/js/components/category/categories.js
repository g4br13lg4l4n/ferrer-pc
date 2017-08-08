import React from 'react'

export const Categories = (props) => {
  let data = props.data
  return(
    <div className = "Categories">
      
      {data.items.map( (el, i) => {
        return (
          <div key={i}>
            <div>
              {el.name}
              <div className="expand"></div>
            </div>

            <div className="sub-menu">
              <ul>
                {el.subcategories.map( (el, index) => {
                  return (
                    <li key={index}>{el}</li>
                  )
                })}
              </ul>
            </div>

          </div>
        )
      })}

    </div>
  )
}



/*return(
    <div className = "Categories">
      <h1 className="Categories-name">{data.categorie.name}</h1>
        {data.categorie.subcategories.map( (el, i) => {
          return (
            <ul className="Categories-subcategories">
              <li  className="Categories-subcategories-item" key = {i}>el</li>
            </ul>
          )
        })}
    </div>
  )
*/