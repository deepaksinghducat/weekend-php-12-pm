{/* 
<div class="card mx-2" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div> 
*/}


class Products {
    products = [
        {
            name: "product1",
            image: 'https://via.placeholder.com/150',
            desc: "loremeasdfasfd"
        },
        {
            name: "product1",
            image: 'https://via.placeholder.com/150',
            desc: "loremeasdfasfd"
        },
        {
            name: "product1",
            image: 'https://via.placeholder.com/150',
            desc: "loremeasdfasfd"
        }
    ]

    render() {

        const app = document.getElementById('app');

        for (const product of this.products) {
            
            const parentEl = new Product(product);

            const parentDiv = parentEl.render();

            app.appendChild(parentDiv);
        }
    }
}

class Product {
    constructor(product) {
        this.name = product.name;
        this.image = product.image;
        this.desc = product.desc;
    }

    render() {
        const parentDiv = document.createElement('div');
        parentDiv.className = "card mx-2"
        parentDiv.style.width = "18rem"

        const img = document.createElement('img');
        img.src = this.image;
        img.className = 'card-img-top'

        const innerDiv = document.createElement('div');
        innerDiv.className = "card-body";

        const h1 = document.createElement('h1');
        h1.className = 'card-title';
        h1.innerHTML = this.name;

        const p = document.createElement('p');
        p.className = 'card-text'
        p.innerHTML = this.desc;

        innerDiv.appendChild(h1);
        innerDiv.appendChild(p);

        parentDiv.appendChild(img);
        parentDiv.appendChild(innerDiv);

        return parentDiv;
    }
}

const products = new Products();
products.render();