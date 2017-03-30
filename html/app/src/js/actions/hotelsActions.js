import * as types from './actionTypes';
import hotelApi from '../api/hotelApi';

export function loadHotels() {
    return function(dispatch) {
        return hotelApi.getAllHotels().then(hotels => {
            dispatch(loadHotelsSuccess(hotels));
        }).catch(error => {
            throw(error);
        });
    };
}

export function loadHotelsSuccess(hotels) {
    return {type: types.LOAD_CATS_SUCCESS, hotels};
}