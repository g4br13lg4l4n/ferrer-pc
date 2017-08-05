import React from 'react'

export const Categories = (props) => {
  let show = props.show
  let data = props.data
  let categorias = fillCategories(6)
  console.log(categorias)
  if (show === true) {
    return (
      <section>
        <h1>{data.name}</h1>
      </section>
    )
  }

  return <h1>no mandaste nada perrooooo >:v</h1>
}