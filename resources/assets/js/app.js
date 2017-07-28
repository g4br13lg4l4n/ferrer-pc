import '../css/index.css'
import React from 'react'
import {render} from 'react-dom'

import {Navbar} from './components/navbar/navbar'
import {Button} from './components/button.js'

class App extends React.Component {
  render () {
    return (
      <div>
        <Navbar/>
      </div>
    )
  }
}

render(<App/>, document.getElementById('app'))
