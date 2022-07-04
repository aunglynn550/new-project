const template = document.createElement('template');
template.innerHTML = `
  <style>
    button{
        background-color: var(--color-suface);
        color: var(--color-text);
    }
    
  </style>
  
  <button>
    <slot />
  </button>`;

class MyButton extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: 'open' });
  }

  connectedCallback() {
    this.shadowRoot.appendChild(template.content.cloneNode(true));
    this.update(this.count);
  }

 
  update(count) {
    //this.shadowRoot.getElementById('count').innerHTML = count;
  }
}

customElements.define('my-button', MyButton);
export default MyButton;