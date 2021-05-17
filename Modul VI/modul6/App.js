import React, {Component} from 'react';
import{
Container,
Header,
Content,
Left,
Right,
Body,
Icon,
Text,
ListItem,
Item,
Input,
} from 'native-base';
let helperArray = require('./nama.json');
export default class App extends Component {
  constructor(props){
    super(props);
    this.state = {
      allUsers: helperArray,
      usersFiltered:helperArray,
    };
  }

searchUser(textToSearch) {
  this.setState({
    usersFiltered: this.state.allUsers.filter(i =>
      i.name.toLowerCase().includes(textToSearch.toLowerCase()),
        ),
    });
  }

  render() {
    return (
      <Container>
        <Header searchBar rounded>
         <Item>
           <Icon name="search"/> 
           <Input 
              placeholder="Search User" 
              onChangeText={text => {
              this.searchUser(text);
             }}
            />
         </Item>
        </Header>
        <Content>
          {this.state.usersFiltered.map((item,index)=>(
            <ListItem>
            <Left></Left>
            <Body>
            <Text>{item.name}</Text>
            <Text>{item.address}</Text>
            </Body>
            <Right />
            </ListItem>
          ))}
            </Content>
            </Container>
    );
  }
}