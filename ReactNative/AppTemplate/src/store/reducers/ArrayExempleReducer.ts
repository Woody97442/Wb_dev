// import {ClassExemple} from "../../models/TypeExemple";


// const initialState = { ArrayExempleReducer: [] };

// function setArrayExempleReducer(state = initialState, action: { type: string; value: any; }) {
//     let nextState;
//     switch (action.type) {
        
//         case 'ADD_ITEM':
//             nextState = {
//                 ...state,
//                 ArrayExempleReducer: [...state.ArrayExempleReducer, action.value],
//             };
//             return nextState || state;  // Penser a retourner les deux

//         case 'REMOVE_ITEM':
//             nextState = {
//                 ...state,
//                 ArrayExempleReducer: state.ArrayExempleReducer.filter((classExemple: ClassExemple) => classExemple.val1 !== action.value)
//             };
//             return nextState || state;
//         default:
//             return state;
//     }
// }

// export default setArrayExempleReducer;