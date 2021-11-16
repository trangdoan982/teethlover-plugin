console.log("Lalala");
// TODO: fetch the data
const WooCommerceRestApi = require("@woocommerce/woocommerce-rest-api").default;

const WooCommerce = new WooCommerceRestApi({
  url: 'https://testshop.markbecker.one/',
  consumerKey: 'ck_56bfed484edb55c925f60ca0b70c0f38e7ecb96b',
  consumerSecret: 'cs_835eafa612f3008a62c684ffc703ab41ee590eab',
  version: 'wc/v3'
});

WooCommerce.get("reports/sales", {
  date_min: "2016-05-03",
  date_max: "2021-12-31"
})
  .then((response) => {
    console.log(response.data);
  })
  .catch((error) => {
    console.log(error.response.data);
  });