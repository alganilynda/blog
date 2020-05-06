
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
export default class Example extends Component {
    render() {
        return (
          <div className="languageSwitcher">
            <div className="flower"></div>
            <p>
              {getTranslation(this.state.lang, 'paragraf')}
            </p>
            <h2>
              {getTranslation(this.state.lang, 'header')}  
            </h2>
            <p className="small">
              {getTranslation(this.state.lang, 'lang-choice')}
            </p>
            <LanguageSwitcherSelector 
              lang={this.state.lang}
              handleChangeLanguage={this.changeLanguageHandler}
            />
            <div> moi je suis la </div>
          </div>
         
        )
      }
    }
    

    ReactDOM.render(
      <LanguageSwitcher />, 
      document.getElementById('example')
    )