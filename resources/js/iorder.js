let IOrder = (function () {

    function hello() {
        console.log('The I-Order JavaScript works! 🙂');
    }

    return {
        hello: hello    // Public available as: VinylShop.hello()
    };
})();

export default IOrder;
