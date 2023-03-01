import {StyleSheet} from 'react-native';
import { PADDING } from '../../utils/commonStyle';

const homeStyles = StyleSheet.create({
    header:{
        flexDirection:'row',
        justifyContent:'space-between',
        alignItems:'center',
        paddingHorizontal: PADDING.horizontal,
        paddingVertical: PADDING.vertical,
        backgroundColor:'white',
        elevation: 5,
    },
    userImg:{
        width:50,
        height:50,
        borderRadius: 50 / 2,
    },
    titleApp:{
        fontSize: 16,
        fontWeight:'bold',
    },
    currentlyGameContainer:{
        alignItems:'center',
        backgroundColor:'white',
        paddingHorizontal: PADDING.horizontal,
        paddingVertical: PADDING.vertical,
    },
    currentlyGameTilte:{
        fontSize: 18,
        fontWeight:'bold',
        marginBottom:10,
    },
    currentlyGameImg:{
        width:500,
        height:500,
    },

    //Styliser la flatlist
    scrolableList:{
        paddingHorizontal: PADDING.horizontal,
        paddingVertical: PADDING.vertical,
    },
    scrolableListItem:{
        flexDirection:'column',
        paddingHorizontal: PADDING.horizontal,
        paddingVertical: PADDING.vertical,
        marginRight:15,
        backgroundColor:'white',
        elevation: 5,

    },

    mainText:{
        fontWeight:'bold',
        fontSize:16,
    },
    subText:{
        marginTop:3,
        fontSize:12,
    }
});

export default homeStyles;