class HotelApi {
    static getAllHotels() {
        return fetch('http://localhost:8090/api/places.json').then(response => {
            return response.json();
        }).catch(error => {
            return error;
        });
    }
}
export default HotelApi;