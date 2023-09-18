// JavaScript Document
const product = [
	{
		id: 1,
		image: 'Images/img3.jpg',
		title:'German Shephered',
		price: '$300',
	},
	{
		id: 2,
		image: 'Images/img2.jpg',
		title:'Mutina',
		price: '$200',
	},
	{id: 3,
		image: 'Images/img4.jpg',
		title:'Bosco',
		price: '$150',
	},
]

const categories = [...new Set(product.map((item)=>{return item}))]

let wishlist = document.getElementById('root')
wishlist.innerHTML = categories.map((item)=>
{
	var{image, title, price} = item;
	return{
		<div class="box">
			<div class="img-box">
				<img src=${image}></img>
			</div>
			<div class= "left">
				<p>${title}</p>
				<h2>${price}</h2>
				<button> Add to Wishlist</button>
			</div>
		</div> 
	}
})