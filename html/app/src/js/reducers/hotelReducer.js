import * as types from '../actions/actionTypes';
import initialState from './initialState';

export default function placeReducer(state = initialState.hotels, action) {
    switch(action.type) {
        case types.LOAD_CATS_SUCCESS:
            return action.hotels
        default:
            return state;
    }
}