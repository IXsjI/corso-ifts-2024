export class Result {
  results?: User[];
}
export class User {
  login?: {
    uuid: string;
    username: string;
    password: string;
    salt: string;
    md5: string;
    sha1: string;
    sha256: string;
  };
  gender?: string;
  name?: {
    title?: string;
    first?: string;
    last?: string;
  };
  location?: {
    street?: {
      number: number;
      name: string;
    };
    city: string;
    state: string;
    country: string;
    postcode: number;
  };
  email?: string;
  dob?: {
    date: string;
    age: number;
  };
  registered?: {
    date: string;
    age: number;
  };
  phone?: string;
  picture?: {
    large: string;
    medium: string;
    thumbnail: string;
  };
  nat?: string;
}


