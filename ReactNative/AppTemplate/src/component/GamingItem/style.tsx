import {StyleSheet} from 'react-native';
import { PADDING } from '../../utils/commonStyle';

export const gamingStyles = StyleSheet.create({
    
    scrolableListItem:{
        flexDirection:'column',
        paddingHorizontal: PADDING.horizontal,
        paddingVertical: PADDING.vertical,
        marginRight:15,
        backgroundColor:'white',
        elevation: 5,
        alignItems:'center',
    },

    mainText:{
        fontWeight:'bold',
        fontSize:16,
        color:'black',

    },
    subText:{
        marginTop:3,
        fontSize:12,
        color:'black',

    },
    itemImage:{
        width:200,
        height:200,
        borderRadius: 5,
    }
});

export default gamingStyles;