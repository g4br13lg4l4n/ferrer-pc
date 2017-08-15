import '../css/index.css'
import React from 'react'
import {render} from 'react-dom'

import {Navbar} from './components/navbar/navbar'
import {Gallery} from './components/gallery/gallery'
import {Info} from './components/info/info'
import {MainContent} from './components/main/main'
import {Footer} from './components/footer/footer'

class App extends React.Component {
  render () {
    return (
      <div>
        <Navbar/>
        <Gallery/>
        <Info/>
        <MainContent/>
        <Footer/>
      </div>
    )
  }
}

render(<App/>, document.getElementById('app'))
