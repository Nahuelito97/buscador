<template id="appWrapper">
  <div class="container">
    <div class="search-box">
      <input
        class="search-input"
        type="text"
        name="q"
        placeholder="escribe algo para buscar..."
      />
      <ul class="result-list show">
        <li v-for="x in 10" class="result-item">
          <a href="#" class="result-link">
            <div class="result-title">Nombre post</div>

            <div class="result-content">
              Lorem ipsum dolor, sit amet consectetur adipisicing
            </div>
          </a>
        </li>
      </ul>
    </div>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
      dignissimos saepe vitae? Labore quaerat suscipit iste iure quasi quisquam
      dicta eum accusamus officia provident dolorum corrupti, ad tempore fuga
      aperiam?
    </p>
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime, neque.
      Necessitatibus saepe voluptatibus, ea perferendis deserunt repellat
      aperiam, quaerat dolorem iure sit adipisci reprehenderit unde consectetur
      possimus quibusdam ut dolore.
    </p>
  </div>
</template>

<script>
    export default {
        data() {
            return {};
        },
    };
</script>

<style>
    body {
        font-family: sans-serif;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .container {
        padding: 30px;
    }

    .search-box {
        position: relative;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .search-input {
        width: 600px;
        height: 30px;
        border-radius: 10px;
        border: 0;
        background: thistle;
        padding: 10px 20px;
        font-size: 18px;
        outline: none;
    }

    .result-list.show{
        position: absolute;
        width: 640px;
        max-height: 250px;
        overflow: auto;
        list-style: none;
        background: tan;
        padding: 0px;
        top: 40px;
        border-radius: 10px;
        box-shadow: 1px 2px 8px 0px #555;
    }

    .result-list.hide{
        display: none;
    }

    .result-item {
        border-bottom: 1px solid chocolate;
    }
    .result-link {
        text-decoration: none;
        color: black;
        display: block;
        padding: 10px 15px;
    }

    .result-link {
        background: #888;
    }

    .result-title {
        font-size: 20px;
        font-weight: 600;
    }

    .result-content {
        font-size: 18px;
    }
</style>
