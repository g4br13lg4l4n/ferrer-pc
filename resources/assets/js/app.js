import '../css/index.css'
import React from 'react'
import {render} from 'react-dom'

import {Navbar} from './components/navbar/navbar'
import {Gallery} from './components/gallery/gallery'
import {Info} from './components/info/info'
import {Main} from './components/main/main'

class App extends React.Component {
  render () {
    return (
      <div>
        <Navbar/>
        <Gallery/>
        <Info/>
        <Main/>
      </div>
    )
  }
}

render(<App/>, document.getElementById('app'))
