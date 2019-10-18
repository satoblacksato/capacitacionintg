<template>
	<div>
		 <b-card
		    title="Card Title"
		    img-src="https://picsum.photos/600/300/?image=25"
		    img-alt="Image"
		    img-top
		    tag="article"
		    style="max-width: 20rem;"
		    class="mb-2 padding-card">
		    <b-card-text>
		      Some quick example text to build on the card title and make up the bulk of the card's content.
		    </b-card-text>

		    <b-button pill href="#" variant="primary">
		    		Detalle</b-button>

		    <b-button pill href="#" variant="danger">
		    		Editar</b-button>

		  </b-card>
	</div>
</template>
<script type="text/javascript">
	export default{
		
	}
</script>
<style type="text/css" scoped>
	.padding-card{
		padding: 8px!important;
	}
</style>