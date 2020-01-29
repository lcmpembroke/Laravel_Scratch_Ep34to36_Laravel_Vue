<template>
    <div class="container component">
        <p>I'm an example component - this text is from js/Components/ExampleComponent.vue file which has data </p>
        <p>I have the following array of food in my data </p>        
        <ul>
            <li v-for="(item,idx) in someArray" :key="idx"> {{ item }} </li>
        </ul>
        <ul>
            <li v-for="(item,index) in someArray" :key="index"> {{ item.food }} </li>
        </ul>        

        <p>I have the following array of objects in my data </p>          
        <ul>
            <li v-for="(myBook,i) in somArrayObjects" :key="i"> {{ myBook }} </li>
        </ul>

    </div>
</template>

<script>
export default {

    data() {
        return {
            someVariable: 'testing variable data',
            someArray: [
                { food: "apple" },
                { food: "banana"},
                { food: "carrot"},                                
                ],
            somArrayObjects: [
                {
                    myBook: {
                        title: 'book1 title',
                        author: 'book1 author',                    
                    }
                },
                {
                    myBook: {
                        title: 'book2 title',
                        author: 'book2 author',                    
                    }
                },
                {
                    myBook: {
                        title: 'book3 title',
                        author: 'book3 author',                    
                    }
                },
                {
                    myBook: {
                        title: 'book4 title',
                        author: 'book4 author',                    
                    }
                },                                           

            ],
        }
        
    },

    mounted() {
        alert('mounted() function of ExampleComponent.vue')
    }
}
</script>

<style scoped>
.component {
    background-color: red;
    padding: 10px;
    border-radius: 20pt;
}
</style>