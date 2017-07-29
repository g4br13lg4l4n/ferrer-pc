import '../css/index.css'
import React from 'react'
import {render} from 'react-dom'

import {Navbar} from './components/navbar/navbar'
import {Gallery} from './components/gallery/gallery.js'

class App extends React.Component {
  render () {
    return (
      <div>
        <Navbar/>
        <Gallery/>
        <section>
          <h2>ENCUENTRA MILES DE PRODUCTOS DE COMPUTO Y SOFTWARE PARA TU HOGAR Y EMPRESA.</h2>
        </section>
      </div>
    )
  }
}

render(<App/>, document.getElementById('app'))
